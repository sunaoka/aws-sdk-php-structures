<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftDataProviderSettings|null $RedshiftSettings
 * @property PostgreSqlDataProviderSettings|null $PostgreSqlSettings
 * @property MySqlDataProviderSettings|null $MySqlSettings
 * @property OracleDataProviderSettings|null $OracleSettings
 * @property MicrosoftSqlServerDataProviderSettings|null $MicrosoftSqlServerSettings
 * @property DocDbDataProviderSettings|null $DocDbSettings
 * @property MariaDbDataProviderSettings|null $MariaDbSettings
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
     *     MicrosoftSqlServerSettings?: MicrosoftSqlServerDataProviderSettings|null,
     *     DocDbSettings?: DocDbDataProviderSettings|null,
     *     MariaDbSettings?: MariaDbDataProviderSettings|null,
     *     MongoDbSettings?: MongoDbDataProviderSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
