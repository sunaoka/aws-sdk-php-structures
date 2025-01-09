<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCrawler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Role
 * @property string $DatabaseName
 * @property string $Description
 * @property Shapes\CrawlerTargets $Targets
 * @property string $Schedule
 * @property list<string> $Classifiers
 * @property string $TablePrefix
 * @property Shapes\SchemaChangePolicy $SchemaChangePolicy
 * @property Shapes\RecrawlPolicy $RecrawlPolicy
 * @property Shapes\LineageConfiguration $LineageConfiguration
 * @property Shapes\LakeFormationConfiguration $LakeFormationConfiguration
 * @property string $Configuration
 * @property string $CrawlerSecurityConfiguration
 */
class UpdateCrawlerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Role?: string,
     *     DatabaseName?: string,
     *     Description?: string,
     *     Targets?: Shapes\CrawlerTargets,
     *     Schedule?: string,
     *     Classifiers?: list<string>,
     *     TablePrefix?: string,
     *     SchemaChangePolicy?: Shapes\SchemaChangePolicy,
     *     RecrawlPolicy?: Shapes\RecrawlPolicy,
     *     LineageConfiguration?: Shapes\LineageConfiguration,
     *     LakeFormationConfiguration?: Shapes\LakeFormationConfiguration,
     *     Configuration?: string,
     *     CrawlerSecurityConfiguration?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
