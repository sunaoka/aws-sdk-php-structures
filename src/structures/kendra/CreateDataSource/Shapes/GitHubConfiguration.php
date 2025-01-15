<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SaaSConfiguration|null $SaaSConfiguration
 * @property OnPremiseConfiguration|null $OnPremiseConfiguration
 * @property 'SAAS'|'ON_PREMISE'|null $Type
 * @property string $SecretArn
 * @property bool|null $UseChangeLog
 * @property GitHubDocumentCrawlProperties|null $GitHubDocumentCrawlProperties
 * @property list<string>|null $RepositoryFilter
 * @property list<string>|null $InclusionFolderNamePatterns
 * @property list<string>|null $InclusionFileTypePatterns
 * @property list<string>|null $InclusionFileNamePatterns
 * @property list<string>|null $ExclusionFolderNamePatterns
 * @property list<string>|null $ExclusionFileTypePatterns
 * @property list<string>|null $ExclusionFileNamePatterns
 * @property DataSourceVpcConfiguration|null $VpcConfiguration
 * @property list<DataSourceToIndexFieldMapping>|null $GitHubRepositoryConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $GitHubCommitConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $GitHubIssueDocumentConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $GitHubIssueCommentConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $GitHubIssueAttachmentConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $GitHubPullRequestCommentConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $GitHubPullRequestDocumentConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $GitHubPullRequestDocumentAttachmentConfigurationFieldMappings
 */
class GitHubConfiguration extends Shape
{
    /**
     * @param array{
     *     SaaSConfiguration?: SaaSConfiguration|null,
     *     OnPremiseConfiguration?: OnPremiseConfiguration|null,
     *     Type?: 'SAAS'|'ON_PREMISE'|null,
     *     SecretArn: string,
     *     UseChangeLog?: bool|null,
     *     GitHubDocumentCrawlProperties?: GitHubDocumentCrawlProperties|null,
     *     RepositoryFilter?: list<string>|null,
     *     InclusionFolderNamePatterns?: list<string>|null,
     *     InclusionFileTypePatterns?: list<string>|null,
     *     InclusionFileNamePatterns?: list<string>|null,
     *     ExclusionFolderNamePatterns?: list<string>|null,
     *     ExclusionFileTypePatterns?: list<string>|null,
     *     ExclusionFileNamePatterns?: list<string>|null,
     *     VpcConfiguration?: DataSourceVpcConfiguration|null,
     *     GitHubRepositoryConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     GitHubCommitConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     GitHubIssueDocumentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     GitHubIssueCommentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     GitHubIssueAttachmentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     GitHubPullRequestCommentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     GitHubPullRequestDocumentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     GitHubPullRequestDocumentAttachmentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
