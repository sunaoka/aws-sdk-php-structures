<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigRuleName
 * @property 'SSM_DOCUMENT' $TargetType
 * @property string $TargetId
 * @property string $TargetVersion
 * @property array<string, RemediationParameterValue> $Parameters
 * @property string $ResourceType
 * @property bool $Automatic
 * @property ExecutionControls $ExecutionControls
 * @property int $MaximumAutomaticAttempts
 * @property int $RetryAttemptSeconds
 * @property string $Arn
 * @property string $CreatedByService
 */
class RemediationConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     TargetType: 'SSM_DOCUMENT',
     *     TargetId: string,
     *     TargetVersion?: string,
     *     Parameters?: array<string, RemediationParameterValue>,
     *     ResourceType?: string,
     *     Automatic?: bool,
     *     ExecutionControls?: ExecutionControls,
     *     MaximumAutomaticAttempts?: int,
     *     RetryAttemptSeconds?: int,
     *     Arn?: string,
     *     CreatedByService?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
