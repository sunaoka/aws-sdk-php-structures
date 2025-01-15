<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCrawler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Role
 * @property string|null $DatabaseName
 * @property string|null $Description
 * @property Shapes\CrawlerTargets|null $Targets
 * @property string|null $Schedule
 * @property list<string>|null $Classifiers
 * @property string|null $TablePrefix
 * @property Shapes\SchemaChangePolicy|null $SchemaChangePolicy
 * @property Shapes\RecrawlPolicy|null $RecrawlPolicy
 * @property Shapes\LineageConfiguration|null $LineageConfiguration
 * @property Shapes\LakeFormationConfiguration|null $LakeFormationConfiguration
 * @property string|null $Configuration
 * @property string|null $CrawlerSecurityConfiguration
 */
class UpdateCrawlerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Role?: string|null,
     *     DatabaseName?: string|null,
     *     Description?: string|null,
     *     Targets?: Shapes\CrawlerTargets|null,
     *     Schedule?: string|null,
     *     Classifiers?: list<string>|null,
     *     TablePrefix?: string|null,
     *     SchemaChangePolicy?: Shapes\SchemaChangePolicy|null,
     *     RecrawlPolicy?: Shapes\RecrawlPolicy|null,
     *     LineageConfiguration?: Shapes\LineageConfiguration|null,
     *     LakeFormationConfiguration?: Shapes\LakeFormationConfiguration|null,
     *     Configuration?: string|null,
     *     CrawlerSecurityConfiguration?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
