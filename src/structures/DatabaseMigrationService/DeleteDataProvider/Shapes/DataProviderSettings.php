<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftDataProviderSettings|null $RedshiftSettings
 * @property PostgreSqlDataProviderSettings|null $PostgreSqlSettings
 * @property MySqlDataProviderSettings|null $MySqlSettings
 * @property OracleDataProviderSettings|null $OracleSettings
 * @property SybaseAseDataProviderSettings|null $SybaseAseSettings
 * @property MicrosoftSqlServerDataProviderSettings|null $MicrosoftSqlServerSettings
 * @property DocDbDataProviderSettings|null $DocDbSettings
 * @property MariaDbDataProviderSettings|null $MariaDbSettings
 * @property IbmDb2LuwDataProviderSettings|null $IbmDb2LuwSettings
 * @property IbmDb2zOsDataProviderSettings|null $IbmDb2zOsSettings
 * @property MongoDbDataProviderSettings|null $MongoDbSettings
 */
class DataProviderSettings extends Shape
{
    /**
     * @param array{
     *     RedshiftSettings?: RedshiftDataProviderSettings|null,
     *     PostgreSqlSettings?: PostgreSqlDataProviderSettings|null,
     *     MySqlSettings?: MySqlDataProviderSettings|null,
     *     OracleSettings?: OracleDataProviderSettings|null,
     *     SybaseAseSettings?: SybaseAseDataProviderSettings|null,
     *     MicrosoftSqlServerSettings?: MicrosoftSqlServerDataProviderSettings|null,
     *     DocDbSettings?: DocDbDataProviderSettings|null,
     *     MariaDbSettings?: MariaDbDataProviderSettings|null,
     *     IbmDb2LuwSettings?: IbmDb2LuwDataProviderSettings|null,
     *     IbmDb2zOsSettings?: IbmDb2zOsDataProviderSettings|null,
     *     MongoDbSettings?: MongoDbDataProviderSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
