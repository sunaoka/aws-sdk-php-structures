<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\DeleteBrandProfileAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $brandProfileId
 * @property string $attributeName
 */
class DeleteBrandProfileAttributeRequest extends Request
{
    /**
     * @param array{
     *     brandProfileId: string,
     *     attributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
