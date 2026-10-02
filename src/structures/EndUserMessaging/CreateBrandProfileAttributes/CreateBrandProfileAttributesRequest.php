<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateBrandProfileAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $brandProfileId
 * @property list<Shapes\BrandProfileAttributeInput> $attributes
 * @property string|null $clientToken
 */
class CreateBrandProfileAttributesRequest extends Request
{
    /**
     * @param array{
     *     brandProfileId: string,
     *     attributes: list<Shapes\BrandProfileAttributeInput>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
