<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestCase;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testCaseId
 * @property string $testCaseArn
 * @property string $name
 * @property string|null $description
 * @property Shapes\TestCaseLatestVersion $latestVersion
 * @property int $testCaseVersion
 * @property 'Active'|'Deleting' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property list<Shapes\Step> $steps
 * @property array<string, string>|null $tags
 */
class GetTestCaseResponse extends Response
{
}
