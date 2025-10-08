<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImageAttribute;

trait DescribeFpgaImageAttributeTrait
{
    /**
     * @param DescribeFpgaImageAttributeRequest $args
     * @return DescribeFpgaImageAttributeResponse
     */
    public function describeFpgaImageAttribute(DescribeFpgaImageAttributeRequest $args)
    {
        $result = parent::describeFpgaImageAttribute($args->toArray());
        return new DescribeFpgaImageAttributeResponse($result->toArray());
    }
}
