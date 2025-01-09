<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableImportFindingsForProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductArn
 */
class EnableImportFindingsForProductRequest extends Request
{
    /**
     * @param array{ProductArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
