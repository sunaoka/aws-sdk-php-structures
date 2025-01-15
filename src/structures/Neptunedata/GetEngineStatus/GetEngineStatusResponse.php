<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetEngineStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $status
 * @property string|null $startTime
 * @property string|null $dbEngineVersion
 * @property string|null $role
 * @property string|null $dfeQueryEngine
 * @property Shapes\QueryLanguageVersion|null $gremlin
 * @property Shapes\QueryLanguageVersion|null $sparql
 * @property Shapes\QueryLanguageVersion|null $opencypher
 * @property array<string, string>|null $labMode
 * @property int|null $rollingBackTrxCount
 * @property string|null $rollingBackTrxEarliestStartTime
 * @property array<string, Shapes\Document>|null $features
 * @property array<string, string>|null $settings
 */
class GetEngineStatusResponse extends Response
{
}
