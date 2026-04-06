<?php

namespace Sunaoka\Aws\Structures\CodeStar\DescribeProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $description
 * @property string|null $clientRequestToken
 * @property \Aws\Api\DateTimeResult|null $createdTimeStamp
 * @property string|null $stackId
 * @property string|null $projectTemplateId
 * @property Shapes\ProjectStatus|null $status
 */
class DescribeProjectResponse extends Response
{
}
