<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftDataProviderSettings $RedshiftSettings
 * @property PostgreSqlDataProviderSettings $PostgreSqlSettings
 * @property MySqlDataProviderSettings $MySqlSettings
 * @property OracleDataProviderSettings $OracleSettings
 * @property MicrosoftSqlServerDataProviderSettings $MicrosoftSqlServerSettings
 * @property DocDbDataProviderSettings $DocDbSettings
 * @property MariaDbDataProviderSettings $MariaDbSettings
 * @property MongoDbDataProviderSettings $MongoDbSettings
 */
class DataProviderSettings extends Shape
{
    /**
     * @param array{
     *     RedshiftSettings?: RedshiftDataProviderSettings,
     *     PostgreSqlSettings?: PostgreSqlDataProviderSettings,
     *     MySqlSettings?: MySqlDataProviderSettings,
     *     OracleSettings?: OracleDataProviderSettings,
     *     MicrosoftSqlServerSettings?: MicrosoftSqlServerDataProviderSettings,
     *     DocDbSettings?: DocDbDataProviderSettings,
     *     MariaDbSettings?: MariaDbDataProviderSettings,
     *     MongoDbSettings?: MongoDbDataProviderSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
