<?php

namespace Sunaoka\Aws\Structures\Billing\CreateBillingView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<string> $sourceViews
 * @property Shapes\Expression $dataFilterExpression
 * @property string $clientToken
 * @property list<Shapes\ResourceTag> $resourceTags
 */
class CreateBillingViewRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     sourceViews: list<string>,
     *     dataFilterExpression?: Shapes\Expression,
     *     clientToken?: string,
     *     resourceTags?: list<Shapes\ResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
