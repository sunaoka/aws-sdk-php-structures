<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeServiceActionExecutionParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProvisionedProductId
 * @property string $ServiceActionId
 * @property string $AcceptLanguage
 */
class DescribeServiceActionExecutionParametersRequest extends Request
{
    /**
     * @param array{
     *     ProvisionedProductId: string,
     *     ServiceActionId: string,
     *     AcceptLanguage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
