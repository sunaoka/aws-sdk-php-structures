<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductAsAdmin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $Id
 * @property string $Name
 * @property string $SourcePortfolioId
 */
class DescribeProductAsAdminRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     Id?: string,
     *     Name?: string,
     *     SourcePortfolioId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
