<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductAsAdmin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $SourcePortfolioId
 */
class DescribeProductAsAdminRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     SourcePortfolioId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
