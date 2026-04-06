<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\UpdateServerEngineAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerName
 * @property string $AttributeName
 * @property string|null $AttributeValue
 */
class UpdateServerEngineAttributesRequest extends Request
{
    /**
     * @param array{
     *     ServerName: string,
     *     AttributeName: string,
     *     AttributeValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
