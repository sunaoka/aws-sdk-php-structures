<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\ExportServerEngineAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportAttributeName
 * @property string $ServerName
 * @property list<Shapes\EngineAttribute> $InputAttributes
 */
class ExportServerEngineAttributeRequest extends Request
{
    /**
     * @param array{
     *     ExportAttributeName: string,
     *     ServerName: string,
     *     InputAttributes?: list<Shapes\EngineAttribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
