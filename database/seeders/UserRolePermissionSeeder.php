<?php

namespace  Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use  Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [

            'الفواتير',
            'قائمة الفواتير',
            'الفواتير المدفوعة',
            'الفواتير المدفوعة جزئيا',
            'الفواتير الغير مدفوعة',
            'ارشيف الفواتير',
            'التقارير',
            'تقرير الفواتير',
            'تقرير العملاء',
            'المستخدمين',
            'قائمة المستخدمين',
            'صلاحيات المستخدمين',
            'الاعدادات',
            'المنتجات',
            'الاقسام',


            'اضافة فاتورة',
            'حذف الفاتورة',
            'تصدير EXCEL',
            'تغير حالة الدفع',
            'تعديل الفاتورة',
            'ارشفة الفاتورة',
            'طباعةالفاتورة',
            'اضافة مرفق',
            'حذف المرفق',

            'اضافة مستخدم',
            'تعديل مستخدم',
            'حذف مستخدم',

            'عرض صلاحية',
            'اضافة صلاحية',
            'تعديل صلاحية',
            'حذف صلاحية',

            'اضافة منتج',
            'تعديل منتج',
            'حذف منتج',

            'اضافة قسم',
            'تعديل قسم',
            'حذف قسم',
            'الاشعارات',

        ];

        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);
        }











        // Let's Create User and assign Role to it.


    }
}
