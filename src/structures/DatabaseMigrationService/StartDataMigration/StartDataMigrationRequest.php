<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartDataMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataMigrationIdentifier
 * @property 'reload-target'|'resume-processing'|'start-replication' $StartType
 */
class StartDataMigrationRequest extends Request
{
    /**
     * @param array{
     *     DataMigrationIdentifier: string,
     *     StartType: 'reload-target'|'resume-processing'|'start-replication'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
