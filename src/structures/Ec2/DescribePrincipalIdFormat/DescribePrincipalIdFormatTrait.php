<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePrincipalIdFormat;

trait DescribePrincipalIdFormatTrait
{
    /**
     * @param DescribePrincipalIdFormatRequest $args
     * @return DescribePrincipalIdFormatResponse
     */
    public function describePrincipalIdFormat(DescribePrincipalIdFormatRequest $args)
    {
        $result = parent::describePrincipalIdFormat($args->toArray());
        return new DescribePrincipalIdFormatResponse($result->toArray());
    }
}
