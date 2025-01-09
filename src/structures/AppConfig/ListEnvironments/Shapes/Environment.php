<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property 'READY_FOR_DEPLOYMENT'|'DEPLOYING'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED' $State
 * @property list<Monitor> $Monitors
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     State?: 'READY_FOR_DEPLOYMENT'|'DEPLOYING'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED',
     *     Monitors?: list<Monitor>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
