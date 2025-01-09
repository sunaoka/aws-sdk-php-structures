<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreatePublicVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property Shapes\NewPublicVirtualInterface $newPublicVirtualInterface
 */
class CreatePublicVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     newPublicVirtualInterface: Shapes\NewPublicVirtualInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
