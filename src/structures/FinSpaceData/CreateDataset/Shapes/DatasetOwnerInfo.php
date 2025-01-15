<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $phoneNumber
 * @property string|null $email
 */
class DatasetOwnerInfo extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     phoneNumber?: string|null,
     *     email?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
