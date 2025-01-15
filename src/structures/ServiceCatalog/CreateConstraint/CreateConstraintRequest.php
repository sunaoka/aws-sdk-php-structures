<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateConstraint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PortfolioId
 * @property string $ProductId
 * @property string $Parameters
 * @property string $Type
 * @property string|null $Description
 * @property string $IdempotencyToken
 */
class CreateConstraintRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PortfolioId: string,
     *     ProductId: string,
     *     Parameters: string,
     *     Type: string,
     *     Description?: string|null,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
