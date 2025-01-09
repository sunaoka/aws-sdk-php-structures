<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateUpload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property \Aws\Api\DateTimeResult $created
 * @property 'ANDROID_APP'|'IOS_APP'|'WEB_APP'|'EXTERNAL_DATA'|'APPIUM_JAVA_JUNIT_TEST_PACKAGE'|'APPIUM_JAVA_TESTNG_TEST_PACKAGE'|'APPIUM_PYTHON_TEST_PACKAGE'|'APPIUM_NODE_TEST_PACKAGE'|'APPIUM_RUBY_TEST_PACKAGE'|'APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE'|'APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE'|'APPIUM_WEB_PYTHON_TEST_PACKAGE'|'APPIUM_WEB_NODE_TEST_PACKAGE'|'APPIUM_WEB_RUBY_TEST_PACKAGE'|'CALABASH_TEST_PACKAGE'|'INSTRUMENTATION_TEST_PACKAGE'|'UIAUTOMATION_TEST_PACKAGE'|'UIAUTOMATOR_TEST_PACKAGE'|'XCTEST_TEST_PACKAGE'|'XCTEST_UI_TEST_PACKAGE'|'APPIUM_JAVA_JUNIT_TEST_SPEC'|'APPIUM_JAVA_TESTNG_TEST_SPEC'|'APPIUM_PYTHON_TEST_SPEC'|'APPIUM_NODE_TEST_SPEC'|'APPIUM_RUBY_TEST_SPEC'|'APPIUM_WEB_JAVA_JUNIT_TEST_SPEC'|'APPIUM_WEB_JAVA_TESTNG_TEST_SPEC'|'APPIUM_WEB_PYTHON_TEST_SPEC'|'APPIUM_WEB_NODE_TEST_SPEC'|'APPIUM_WEB_RUBY_TEST_SPEC'|'INSTRUMENTATION_TEST_SPEC'|'XCTEST_UI_TEST_SPEC' $type
 * @property 'INITIALIZED'|'PROCESSING'|'SUCCEEDED'|'FAILED' $status
 * @property string $url
 * @property string $metadata
 * @property string $contentType
 * @property string $message
 * @property 'CURATED'|'PRIVATE' $category
 */
class Upload extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     created?: \Aws\Api\DateTimeResult,
     *     type?: 'ANDROID_APP'|'IOS_APP'|'WEB_APP'|'EXTERNAL_DATA'|'APPIUM_JAVA_JUNIT_TEST_PACKAGE'|'APPIUM_JAVA_TESTNG_TEST_PACKAGE'|'APPIUM_PYTHON_TEST_PACKAGE'|'APPIUM_NODE_TEST_PACKAGE'|'APPIUM_RUBY_TEST_PACKAGE'|'APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE'|'APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE'|'APPIUM_WEB_PYTHON_TEST_PACKAGE'|'APPIUM_WEB_NODE_TEST_PACKAGE'|'APPIUM_WEB_RUBY_TEST_PACKAGE'|'CALABASH_TEST_PACKAGE'|'INSTRUMENTATION_TEST_PACKAGE'|'UIAUTOMATION_TEST_PACKAGE'|'UIAUTOMATOR_TEST_PACKAGE'|'XCTEST_TEST_PACKAGE'|'XCTEST_UI_TEST_PACKAGE'|'APPIUM_JAVA_JUNIT_TEST_SPEC'|'APPIUM_JAVA_TESTNG_TEST_SPEC'|'APPIUM_PYTHON_TEST_SPEC'|'APPIUM_NODE_TEST_SPEC'|'APPIUM_RUBY_TEST_SPEC'|'APPIUM_WEB_JAVA_JUNIT_TEST_SPEC'|'APPIUM_WEB_JAVA_TESTNG_TEST_SPEC'|'APPIUM_WEB_PYTHON_TEST_SPEC'|'APPIUM_WEB_NODE_TEST_SPEC'|'APPIUM_WEB_RUBY_TEST_SPEC'|'INSTRUMENTATION_TEST_SPEC'|'XCTEST_UI_TEST_SPEC',
     *     status?: 'INITIALIZED'|'PROCESSING'|'SUCCEEDED'|'FAILED',
     *     url?: string,
     *     metadata?: string,
     *     contentType?: string,
     *     message?: string,
     *     category?: 'CURATED'|'PRIVATE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
