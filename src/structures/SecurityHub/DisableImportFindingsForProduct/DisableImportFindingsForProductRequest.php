<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DisableImportFindingsForProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductSubscriptionArn
 */
class DisableImportFindingsForProductRequest extends Request
{
    /**
     * @param array{ProductSubscriptionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
