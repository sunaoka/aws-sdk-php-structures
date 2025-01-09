<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $UseLakeFormationCredentials
 * @property string $AccountId
 */
class LakeFormationConfiguration extends Shape
{
    /**
     * @param array{
     *     UseLakeFormationCredentials?: bool,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
