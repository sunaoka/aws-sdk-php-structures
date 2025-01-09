<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCrawler;

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
 * @property array<string, string> $Tags
 */
class CreateCrawlerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Role: string,
     *     DatabaseName?: string,
     *     Description?: string,
     *     Targets: Shapes\CrawlerTargets,
     *     Schedule?: string,
     *     Classifiers?: list<string>,
     *     TablePrefix?: string,
     *     SchemaChangePolicy?: Shapes\SchemaChangePolicy,
     *     RecrawlPolicy?: Shapes\RecrawlPolicy,
     *     LineageConfiguration?: Shapes\LineageConfiguration,
     *     LakeFormationConfiguration?: Shapes\LakeFormationConfiguration,
     *     Configuration?: string,
     *     CrawlerSecurityConfiguration?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
