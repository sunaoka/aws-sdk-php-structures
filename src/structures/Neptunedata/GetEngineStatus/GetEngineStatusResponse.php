<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetEngineStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $status
 * @property string $startTime
 * @property string $dbEngineVersion
 * @property string $role
 * @property string $dfeQueryEngine
 * @property Shapes\QueryLanguageVersion $gremlin
 * @property Shapes\QueryLanguageVersion $sparql
 * @property Shapes\QueryLanguageVersion $opencypher
 * @property array<string, string> $labMode
 * @property int $rollingBackTrxCount
 * @property string $rollingBackTrxEarliestStartTime
 * @property array<string, Shapes\Document> $features
 * @property array<string, string> $settings
 */
class GetEngineStatusResponse extends Response
{
}
