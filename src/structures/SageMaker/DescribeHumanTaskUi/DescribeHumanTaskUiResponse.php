<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHumanTaskUi;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HumanTaskUiArn
 * @property string $HumanTaskUiName
 * @property 'Active'|'Deleting'|null $HumanTaskUiStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UiTemplateInfo $UiTemplate
 */
class DescribeHumanTaskUiResponse extends Response
{
}
