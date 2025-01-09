<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<ContentTypeProfile> $Items
 */
class ContentTypeProfiles extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<ContentTypeProfile>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
