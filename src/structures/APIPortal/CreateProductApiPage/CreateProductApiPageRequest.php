<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateProductApiPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property string $managedApiId
 * @property Shapes\ApiPageDisplayContent|null $displayContent
 * @property 'ENABLED'|'DISABLED'|null $tryItState
 * @property array<string, string>|null $tags
 */
class CreateProductApiPageRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     managedApiId: string,
     *     displayContent?: Shapes\ApiPageDisplayContent|null,
     *     tryItState?: 'ENABLED'|'DISABLED'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
