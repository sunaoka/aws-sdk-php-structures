<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCrawler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Role
 * @property string|null $DatabaseName
 * @property string|null $Description
 * @property Shapes\CrawlerTargets $Targets
 * @property string|null $Schedule
 * @property list<string>|null $Classifiers
 * @property string|null $TablePrefix
 * @property Shapes\SchemaChangePolicy|null $SchemaChangePolicy
 * @property Shapes\RecrawlPolicy|null $RecrawlPolicy
 * @property Shapes\LineageConfiguration|null $LineageConfiguration
 * @property Shapes\LakeFormationConfiguration|null $LakeFormationConfiguration
 * @property string|null $Configuration
 * @property string|null $CrawlerSecurityConfiguration
 * @property array<string, string>|null $Tags
 */
class CreateCrawlerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Role: string,
     *     DatabaseName?: string|null,
     *     Description?: string|null,
     *     Targets: Shapes\CrawlerTargets,
     *     Schedule?: string|null,
     *     Classifiers?: list<string>|null,
     *     TablePrefix?: string|null,
     *     SchemaChangePolicy?: Shapes\SchemaChangePolicy|null,
     *     RecrawlPolicy?: Shapes\RecrawlPolicy|null,
     *     LineageConfiguration?: Shapes\LineageConfiguration|null,
     *     LakeFormationConfiguration?: Shapes\LakeFormationConfiguration|null,
     *     Configuration?: string|null,
     *     CrawlerSecurityConfiguration?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
