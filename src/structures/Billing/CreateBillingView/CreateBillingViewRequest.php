<?php

namespace Sunaoka\Aws\Structures\Billing\CreateBillingView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<string> $sourceViews
 * @property Shapes\Expression|null $dataFilterExpression
 * @property string|null $clientToken
 * @property list<Shapes\ResourceTag>|null $resourceTags
 */
class CreateBillingViewRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     sourceViews: list<string>,
     *     dataFilterExpression?: Shapes\Expression|null,
     *     clientToken?: string|null,
     *     resourceTags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
