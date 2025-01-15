<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigRuleName
 * @property 'SSM_DOCUMENT' $TargetType
 * @property string $TargetId
 * @property string|null $TargetVersion
 * @property array<string, RemediationParameterValue>|null $Parameters
 * @property string|null $ResourceType
 * @property bool|null $Automatic
 * @property ExecutionControls|null $ExecutionControls
 * @property int<1, 25>|null $MaximumAutomaticAttempts
 * @property int<1, 2678000>|null $RetryAttemptSeconds
 * @property string|null $Arn
 * @property string|null $CreatedByService
 */
class RemediationConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     TargetType: 'SSM_DOCUMENT',
     *     TargetId: string,
     *     TargetVersion?: string|null,
     *     Parameters?: array<string, RemediationParameterValue>|null,
     *     ResourceType?: string|null,
     *     Automatic?: bool|null,
     *     ExecutionControls?: ExecutionControls|null,
     *     MaximumAutomaticAttempts?: int<1, 25>|null,
     *     RetryAttemptSeconds?: int<1, 2678000>|null,
     *     Arn?: string|null,
     *     CreatedByService?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
