<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateLayout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $name
 * @property Shapes\LayoutContent $content
 */
class CreateLayoutRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     name: string,
     *     content: Shapes\LayoutContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
