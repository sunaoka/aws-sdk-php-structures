<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GeneratedTemplateId
 * @property string|null $GeneratedTemplateName
 * @property list<Shapes\ResourceDetail>|null $Resources
 * @property 'CREATE_PENDING'|'UPDATE_PENDING'|'DELETE_PENDING'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'FAILED'|'COMPLETE'|null $Status
 * @property string|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property Shapes\TemplateProgress|null $Progress
 * @property string|null $StackId
 * @property Shapes\TemplateConfiguration|null $TemplateConfiguration
 * @property int<0, max>|null $TotalWarnings
 */
class DescribeGeneratedTemplateResponse extends Response
{
}
