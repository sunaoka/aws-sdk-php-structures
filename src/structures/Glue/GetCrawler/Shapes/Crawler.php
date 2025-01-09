<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Role
 * @property CrawlerTargets $Targets
 * @property string $DatabaseName
 * @property string $Description
 * @property list<string> $Classifiers
 * @property RecrawlPolicy $RecrawlPolicy
 * @property SchemaChangePolicy $SchemaChangePolicy
 * @property LineageConfiguration $LineageConfiguration
 * @property 'READY'|'RUNNING'|'STOPPING' $State
 * @property string $TablePrefix
 * @property Schedule $Schedule
 * @property int $CrawlElapsedTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property LastCrawlInfo $LastCrawl
 * @property int $Version
 * @property string $Configuration
 * @property string $CrawlerSecurityConfiguration
 * @property LakeFormationConfiguration $LakeFormationConfiguration
 */
class Crawler extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Role?: string,
     *     Targets?: CrawlerTargets,
     *     DatabaseName?: string,
     *     Description?: string,
     *     Classifiers?: list<string>,
     *     RecrawlPolicy?: RecrawlPolicy,
     *     SchemaChangePolicy?: SchemaChangePolicy,
     *     LineageConfiguration?: LineageConfiguration,
     *     State?: 'READY'|'RUNNING'|'STOPPING',
     *     TablePrefix?: string,
     *     Schedule?: Schedule,
     *     CrawlElapsedTime?: int,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     LastCrawl?: LastCrawlInfo,
     *     Version?: int,
     *     Configuration?: string,
     *     CrawlerSecurityConfiguration?: string,
     *     LakeFormationConfiguration?: LakeFormationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
