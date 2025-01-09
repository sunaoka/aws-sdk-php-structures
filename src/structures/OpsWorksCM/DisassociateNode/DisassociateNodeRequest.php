<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DisassociateNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerName
 * @property string $NodeName
 * @property list<Shapes\EngineAttribute> $EngineAttributes
 */
class DisassociateNodeRequest extends Request
{
    /**
     * @param array{
     *     ServerName: string,
     *     NodeName: string,
     *     EngineAttributes?: list<Shapes\EngineAttribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
