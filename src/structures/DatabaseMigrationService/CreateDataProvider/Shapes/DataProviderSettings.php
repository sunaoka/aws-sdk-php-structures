<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PostgreSqlDataProviderSettings|null $PostgreSqlSettings
 * @property MySqlDataProviderSettings|null $MySqlSettings
 * @property OracleDataProviderSettings|null $OracleSettings
 * @property MicrosoftSqlServerDataProviderSettings|null $MicrosoftSqlServerSettings
 */
class DataProviderSettings extends Shape
{
    /**
     * @param array{
     *     PostgreSqlSettings?: PostgreSqlDataProviderSettings|null,
     *     MySqlSettings?: MySqlDataProviderSettings|null,
     *     OracleSettings?: OracleDataProviderSettings|null,
     *     MicrosoftSqlServerSettings?: MicrosoftSqlServerDataProviderSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
