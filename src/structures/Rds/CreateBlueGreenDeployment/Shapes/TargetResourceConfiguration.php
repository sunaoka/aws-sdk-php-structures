<?php

namespace Sunaoka\Aws\Structures\Rds\CreateBlueGreenDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string|null $TargetKmsKeyId
 */
class TargetResourceConfiguration extends Shape
{
    /**
     * @param array{
     *     SourceArn: string,
     *     TargetKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
