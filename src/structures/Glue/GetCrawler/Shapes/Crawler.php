<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Role
 * @property CrawlerTargets|null $Targets
 * @property string|null $DatabaseName
 * @property string|null $Description
 * @property list<string>|null $Classifiers
 * @property RecrawlPolicy|null $RecrawlPolicy
 * @property SchemaChangePolicy|null $SchemaChangePolicy
 * @property LineageConfiguration|null $LineageConfiguration
 * @property 'READY'|'RUNNING'|'STOPPING'|null $State
 * @property string|null $TablePrefix
 * @property Schedule|null $Schedule
 * @property int|null $CrawlElapsedTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property LastCrawlInfo|null $LastCrawl
 * @property int|null $Version
 * @property string|null $Configuration
 * @property string|null $CrawlerSecurityConfiguration
 * @property LakeFormationConfiguration|null $LakeFormationConfiguration
 */
class Crawler extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Role?: string|null,
     *     Targets?: CrawlerTargets|null,
     *     DatabaseName?: string|null,
     *     Description?: string|null,
     *     Classifiers?: list<string>|null,
     *     RecrawlPolicy?: RecrawlPolicy|null,
     *     SchemaChangePolicy?: SchemaChangePolicy|null,
     *     LineageConfiguration?: LineageConfiguration|null,
     *     State?: 'READY'|'RUNNING'|'STOPPING'|null,
     *     TablePrefix?: string|null,
     *     Schedule?: Schedule|null,
     *     CrawlElapsedTime?: int|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     LastCrawl?: LastCrawlInfo|null,
     *     Version?: int|null,
     *     Configuration?: string|null,
     *     CrawlerSecurityConfiguration?: string|null,
     *     LakeFormationConfiguration?: LakeFormationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
