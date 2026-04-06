<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property 'READY_FOR_DEPLOYMENT'|'DEPLOYING'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED'|null $State
 * @property list<Monitor>|null $Monitors
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     State?: 'READY_FOR_DEPLOYMENT'|'DEPLOYING'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED'|null,
     *     Monitors?: list<Monitor>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
