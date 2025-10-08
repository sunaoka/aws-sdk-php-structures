<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListVirtualInterfaceTestHistory;

trait ListVirtualInterfaceTestHistoryTrait
{
    /**
     * @param ListVirtualInterfaceTestHistoryRequest $args
     * @return ListVirtualInterfaceTestHistoryResponse
     */
    public function listVirtualInterfaceTestHistory(ListVirtualInterfaceTestHistoryRequest $args)
    {
        $result = parent::listVirtualInterfaceTestHistory($args->toArray());
        return new ListVirtualInterfaceTestHistoryResponse($result->toArray());
    }
}
