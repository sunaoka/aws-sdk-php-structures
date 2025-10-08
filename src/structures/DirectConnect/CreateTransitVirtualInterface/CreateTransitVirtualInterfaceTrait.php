<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateTransitVirtualInterface;

trait CreateTransitVirtualInterfaceTrait
{
    /**
     * @param CreateTransitVirtualInterfaceRequest $args
     * @return CreateTransitVirtualInterfaceResponse
     */
    public function createTransitVirtualInterface(CreateTransitVirtualInterfaceRequest $args)
    {
        $result = parent::createTransitVirtualInterface($args->toArray());
        return new CreateTransitVirtualInterfaceResponse($result->toArray());
    }
}
