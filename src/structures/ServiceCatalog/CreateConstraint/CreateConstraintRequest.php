<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateConstraint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PortfolioId
 * @property string $ProductId
 * @property string $Parameters
 * @property string $Type
 * @property string $Description
 * @property string $IdempotencyToken
 */
class CreateConstraintRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PortfolioId: string,
     *     ProductId: string,
     *     Parameters: string,
     *     Type: string,
     *     Description?: string,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
