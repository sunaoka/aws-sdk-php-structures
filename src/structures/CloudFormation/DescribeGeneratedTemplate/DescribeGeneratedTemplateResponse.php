<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GeneratedTemplateId
 * @property string $GeneratedTemplateName
 * @property list<Shapes\ResourceDetail> $Resources
 * @property 'CREATE_PENDING'|'UPDATE_PENDING'|'DELETE_PENDING'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'FAILED'|'COMPLETE' $Status
 * @property string $StatusReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property Shapes\TemplateProgress $Progress
 * @property string $StackId
 * @property Shapes\TemplateConfiguration $TemplateConfiguration
 * @property int $TotalWarnings
 */
class DescribeGeneratedTemplateResponse extends Response
{
}
