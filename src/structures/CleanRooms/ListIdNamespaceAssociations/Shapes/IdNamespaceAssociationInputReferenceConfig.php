<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIdNamespaceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputReferenceArn
 * @property bool $manageResourcePolicies
 */
class IdNamespaceAssociationInputReferenceConfig extends Shape
{
    /**
     * @param array{
     *     inputReferenceArn: string,
     *     manageResourcePolicies: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
