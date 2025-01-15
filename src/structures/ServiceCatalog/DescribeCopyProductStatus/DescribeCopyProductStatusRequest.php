<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeCopyProductStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $CopyProductToken
 */
class DescribeCopyProductStatusRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     CopyProductToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
