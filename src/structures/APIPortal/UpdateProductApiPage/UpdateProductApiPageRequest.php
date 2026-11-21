<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdateProductApiPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property string $productApiPageId
 * @property Shapes\ApiPageDisplayContent|null $displayContent
 * @property 'ENABLED'|'DISABLED'|null $tryItState
 */
class UpdateProductApiPageRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     productApiPageId: string,
     *     displayContent?: Shapes\ApiPageDisplayContent|null,
     *     tryItState?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
