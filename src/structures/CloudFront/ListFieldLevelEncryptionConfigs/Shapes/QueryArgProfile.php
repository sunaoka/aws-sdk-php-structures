<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFieldLevelEncryptionConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryArg
 * @property string $ProfileId
 */
class QueryArgProfile extends Shape
{
    /**
     * @param array{
     *     QueryArg: string,
     *     ProfileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
