<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperimentTargetAccountConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $accountId
 * @property string $description
 */
class ExperimentTargetAccountConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     roleArn?: string,
     *     accountId?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
