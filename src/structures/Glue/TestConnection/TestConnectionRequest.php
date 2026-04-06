<?php

namespace Sunaoka\Aws\Structures\Glue\TestConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ConnectionName
 * @property string|null $CatalogId
 * @property Shapes\TestConnectionInput|null $TestConnectionInput
 */
class TestConnectionRequest extends Request
{
    /**
     * @param array{
     *     ConnectionName?: string|null,
     *     CatalogId?: string|null,
     *     TestConnectionInput?: Shapes\TestConnectionInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
