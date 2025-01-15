<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $UseLakeFormationCredentials
 * @property string|null $AccountId
 */
class LakeFormationConfiguration extends Shape
{
    /**
     * @param array{
     *     UseLakeFormationCredentials?: bool|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
