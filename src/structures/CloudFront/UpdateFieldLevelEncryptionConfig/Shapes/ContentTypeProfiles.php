<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFieldLevelEncryptionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<ContentTypeProfile>|null $Items
 */
class ContentTypeProfiles extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<ContentTypeProfile>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
