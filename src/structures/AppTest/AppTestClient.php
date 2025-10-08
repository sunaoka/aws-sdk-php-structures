<?php

namespace Sunaoka\Aws\Structures\AppTest;

class AppTestClient extends \Aws\AppTest\AppTestClient
{
    use CreateTestCase\CreateTestCaseTrait;
    use CreateTestConfiguration\CreateTestConfigurationTrait;
    use CreateTestSuite\CreateTestSuiteTrait;
    use DeleteTestCase\DeleteTestCaseTrait;
    use DeleteTestConfiguration\DeleteTestConfigurationTrait;
    use DeleteTestRun\DeleteTestRunTrait;
    use DeleteTestSuite\DeleteTestSuiteTrait;
    use GetTestCase\GetTestCaseTrait;
    use GetTestConfiguration\GetTestConfigurationTrait;
    use GetTestRunStep\GetTestRunStepTrait;
    use GetTestSuite\GetTestSuiteTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTestCases\ListTestCasesTrait;
    use ListTestConfigurations\ListTestConfigurationsTrait;
    use ListTestRunSteps\ListTestRunStepsTrait;
    use ListTestRunTestCases\ListTestRunTestCasesTrait;
    use ListTestRuns\ListTestRunsTrait;
    use ListTestSuites\ListTestSuitesTrait;
    use StartTestRun\StartTestRunTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateTestCase\UpdateTestCaseTrait;
    use UpdateTestConfiguration\UpdateTestConfigurationTrait;
    use UpdateTestSuite\UpdateTestSuiteTrait;
}
