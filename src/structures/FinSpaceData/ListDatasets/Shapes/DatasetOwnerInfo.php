<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $phoneNumber
 * @property string $email
 */
class DatasetOwnerInfo extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     phoneNumber?: string,
     *     email?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
