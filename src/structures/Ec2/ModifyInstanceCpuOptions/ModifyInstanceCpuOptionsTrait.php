<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCpuOptions;

trait ModifyInstanceCpuOptionsTrait
{
    /**
     * @param ModifyInstanceCpuOptionsRequest $args
     * @return ModifyInstanceCpuOptionsResponse
     */
    public function modifyInstanceCpuOptions(ModifyInstanceCpuOptionsRequest $args)
    {
        $result = parent::modifyInstanceCpuOptions($args->toArray());
        return new ModifyInstanceCpuOptionsResponse($result->toArray());
    }
}
